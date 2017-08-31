<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_be86a5a82cb726c774d4c80603da8532662fd579e82ada2f5ae013f6379211fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2b7445466ca7952502f64102162f10ef3723631f1429d227211f8c35cd220168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7445466ca7952502f64102162f10ef3723631f1429d227211f8c35cd220168->enter($__internal_2b7445466ca7952502f64102162f10ef3723631f1429d227211f8c35cd220168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_2f1a89819a621b1c098bd9e6d8efaa2b95ecfa7d0475da466154790c68b3942c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1a89819a621b1c098bd9e6d8efaa2b95ecfa7d0475da466154790c68b3942c->enter($__internal_2f1a89819a621b1c098bd9e6d8efaa2b95ecfa7d0475da466154790c68b3942c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7445466ca7952502f64102162f10ef3723631f1429d227211f8c35cd220168->leave($__internal_2b7445466ca7952502f64102162f10ef3723631f1429d227211f8c35cd220168_prof);

        
        $__internal_2f1a89819a621b1c098bd9e6d8efaa2b95ecfa7d0475da466154790c68b3942c->leave($__internal_2f1a89819a621b1c098bd9e6d8efaa2b95ecfa7d0475da466154790c68b3942c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_453c81474840d2fc5d4cacce050760cb60b60676caa38d962cf192743aeb0b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453c81474840d2fc5d4cacce050760cb60b60676caa38d962cf192743aeb0b0e->enter($__internal_453c81474840d2fc5d4cacce050760cb60b60676caa38d962cf192743aeb0b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c04b10051f92186103af479cbea4c51ff4b9a19c42b0ac233973e32014776927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04b10051f92186103af479cbea4c51ff4b9a19c42b0ac233973e32014776927->enter($__internal_c04b10051f92186103af479cbea4c51ff4b9a19c42b0ac233973e32014776927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c04b10051f92186103af479cbea4c51ff4b9a19c42b0ac233973e32014776927->leave($__internal_c04b10051f92186103af479cbea4c51ff4b9a19c42b0ac233973e32014776927_prof);

        
        $__internal_453c81474840d2fc5d4cacce050760cb60b60676caa38d962cf192743aeb0b0e->leave($__internal_453c81474840d2fc5d4cacce050760cb60b60676caa38d962cf192743aeb0b0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
