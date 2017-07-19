<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_6401da66b0a171a3e5f8a99aeb1524f7695f477071e438c487a6260f2123576f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_474190ca2c63ccaaa658c2ce17989058be781ce15a7c7dbcf0697831ecc2c393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474190ca2c63ccaaa658c2ce17989058be781ce15a7c7dbcf0697831ecc2c393->enter($__internal_474190ca2c63ccaaa658c2ce17989058be781ce15a7c7dbcf0697831ecc2c393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_0520c558681efed20a7aa9475b11d5a28e73b639ab31bbfe4a02be6c05fd6f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0520c558681efed20a7aa9475b11d5a28e73b639ab31bbfe4a02be6c05fd6f1a->enter($__internal_0520c558681efed20a7aa9475b11d5a28e73b639ab31bbfe4a02be6c05fd6f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_474190ca2c63ccaaa658c2ce17989058be781ce15a7c7dbcf0697831ecc2c393->leave($__internal_474190ca2c63ccaaa658c2ce17989058be781ce15a7c7dbcf0697831ecc2c393_prof);

        
        $__internal_0520c558681efed20a7aa9475b11d5a28e73b639ab31bbfe4a02be6c05fd6f1a->leave($__internal_0520c558681efed20a7aa9475b11d5a28e73b639ab31bbfe4a02be6c05fd6f1a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1997bed5ad40463a5cb9607bb7e36b8f5d17fc76fdf8f2a7be259b6aa6cd9d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1997bed5ad40463a5cb9607bb7e36b8f5d17fc76fdf8f2a7be259b6aa6cd9d5e->enter($__internal_1997bed5ad40463a5cb9607bb7e36b8f5d17fc76fdf8f2a7be259b6aa6cd9d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e5605b03f3ab13786e1f111611334b607b6d910c0d8025fb2764169a14200aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5605b03f3ab13786e1f111611334b607b6d910c0d8025fb2764169a14200aa0->enter($__internal_e5605b03f3ab13786e1f111611334b607b6d910c0d8025fb2764169a14200aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e5605b03f3ab13786e1f111611334b607b6d910c0d8025fb2764169a14200aa0->leave($__internal_e5605b03f3ab13786e1f111611334b607b6d910c0d8025fb2764169a14200aa0_prof);

        
        $__internal_1997bed5ad40463a5cb9607bb7e36b8f5d17fc76fdf8f2a7be259b6aa6cd9d5e->leave($__internal_1997bed5ad40463a5cb9607bb7e36b8f5d17fc76fdf8f2a7be259b6aa6cd9d5e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
