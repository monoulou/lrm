<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_00a2017cdf1e05562e48f464a0eeb86744dbd6455c0e000a3548bbc43a001feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 2);
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
        $__internal_088cd259c139bcd290e2a6eba60cef882380526693806e3f8986c3bfe24bca05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088cd259c139bcd290e2a6eba60cef882380526693806e3f8986c3bfe24bca05->enter($__internal_088cd259c139bcd290e2a6eba60cef882380526693806e3f8986c3bfe24bca05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_088cd259c139bcd290e2a6eba60cef882380526693806e3f8986c3bfe24bca05->leave($__internal_088cd259c139bcd290e2a6eba60cef882380526693806e3f8986c3bfe24bca05_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8b281775f2aba73bd6a4814c4c6290773acd59f3deb2c4f421c3adf77909570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b281775f2aba73bd6a4814c4c6290773acd59f3deb2c4f421c3adf77909570->enter($__internal_e8b281775f2aba73bd6a4814c4c6290773acd59f3deb2c4f421c3adf77909570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_e8b281775f2aba73bd6a4814c4c6290773acd59f3deb2c4f421c3adf77909570->leave($__internal_e8b281775f2aba73bd6a4814c4c6290773acd59f3deb2c4f421c3adf77909570_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
