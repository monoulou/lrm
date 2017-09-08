<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b4fc9d2962c401720943bac34c8b8133a1526d9958f3882c1394afa898a65ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_28eb0af384484ce0121c03d4a733642572f9dda083383678bfa8b4545afb59cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28eb0af384484ce0121c03d4a733642572f9dda083383678bfa8b4545afb59cf->enter($__internal_28eb0af384484ce0121c03d4a733642572f9dda083383678bfa8b4545afb59cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f1fbe919427e85bf730f12e560ad7493864de92a4485e2148c01c55cacbb5e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fbe919427e85bf730f12e560ad7493864de92a4485e2148c01c55cacbb5e62->enter($__internal_f1fbe919427e85bf730f12e560ad7493864de92a4485e2148c01c55cacbb5e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28eb0af384484ce0121c03d4a733642572f9dda083383678bfa8b4545afb59cf->leave($__internal_28eb0af384484ce0121c03d4a733642572f9dda083383678bfa8b4545afb59cf_prof);

        
        $__internal_f1fbe919427e85bf730f12e560ad7493864de92a4485e2148c01c55cacbb5e62->leave($__internal_f1fbe919427e85bf730f12e560ad7493864de92a4485e2148c01c55cacbb5e62_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2266462125ebb8466c2bb666a44b1563a8b62fc3cf586ffb74bf0b307219e10e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2266462125ebb8466c2bb666a44b1563a8b62fc3cf586ffb74bf0b307219e10e->enter($__internal_2266462125ebb8466c2bb666a44b1563a8b62fc3cf586ffb74bf0b307219e10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_034bd984bbd0860bc301d137bdae787bfee3bea6fcc43ebdc55e93df97b20c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034bd984bbd0860bc301d137bdae787bfee3bea6fcc43ebdc55e93df97b20c4d->enter($__internal_034bd984bbd0860bc301d137bdae787bfee3bea6fcc43ebdc55e93df97b20c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_034bd984bbd0860bc301d137bdae787bfee3bea6fcc43ebdc55e93df97b20c4d->leave($__internal_034bd984bbd0860bc301d137bdae787bfee3bea6fcc43ebdc55e93df97b20c4d_prof);

        
        $__internal_2266462125ebb8466c2bb666a44b1563a8b62fc3cf586ffb74bf0b307219e10e->leave($__internal_2266462125ebb8466c2bb666a44b1563a8b62fc3cf586ffb74bf0b307219e10e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
