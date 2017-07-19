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
        $__internal_a8f301f6f00eb9f6c25c1b2bc213e6520efd3d981c0744c7a79c32a055e7378f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f301f6f00eb9f6c25c1b2bc213e6520efd3d981c0744c7a79c32a055e7378f->enter($__internal_a8f301f6f00eb9f6c25c1b2bc213e6520efd3d981c0744c7a79c32a055e7378f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_1b432c60bed265a4c1114954990d90aaa180d5782d966b779ec025cda3411e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b432c60bed265a4c1114954990d90aaa180d5782d966b779ec025cda3411e08->enter($__internal_1b432c60bed265a4c1114954990d90aaa180d5782d966b779ec025cda3411e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f301f6f00eb9f6c25c1b2bc213e6520efd3d981c0744c7a79c32a055e7378f->leave($__internal_a8f301f6f00eb9f6c25c1b2bc213e6520efd3d981c0744c7a79c32a055e7378f_prof);

        
        $__internal_1b432c60bed265a4c1114954990d90aaa180d5782d966b779ec025cda3411e08->leave($__internal_1b432c60bed265a4c1114954990d90aaa180d5782d966b779ec025cda3411e08_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72aee6565b77e764520eafe3eb44bbbe8eca372a876b97d123d3889f4bb86b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72aee6565b77e764520eafe3eb44bbbe8eca372a876b97d123d3889f4bb86b5c->enter($__internal_72aee6565b77e764520eafe3eb44bbbe8eca372a876b97d123d3889f4bb86b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c9507164d19c83370e44759e2540f6124af4d9a03417b21b468290d3b46a5f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9507164d19c83370e44759e2540f6124af4d9a03417b21b468290d3b46a5f3c->enter($__internal_c9507164d19c83370e44759e2540f6124af4d9a03417b21b468290d3b46a5f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c9507164d19c83370e44759e2540f6124af4d9a03417b21b468290d3b46a5f3c->leave($__internal_c9507164d19c83370e44759e2540f6124af4d9a03417b21b468290d3b46a5f3c_prof);

        
        $__internal_72aee6565b77e764520eafe3eb44bbbe8eca372a876b97d123d3889f4bb86b5c->leave($__internal_72aee6565b77e764520eafe3eb44bbbe8eca372a876b97d123d3889f4bb86b5c_prof);

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
