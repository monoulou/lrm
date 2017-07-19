<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0d4a7e0098e026616195d1cd428f9afc8c59d3f18b6f03c0c4311a5e29cc2354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_97a9d4e658641a7ba773cef75ce8aa083eee9c00e18d82c7b8304292854bda19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a9d4e658641a7ba773cef75ce8aa083eee9c00e18d82c7b8304292854bda19->enter($__internal_97a9d4e658641a7ba773cef75ce8aa083eee9c00e18d82c7b8304292854bda19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_981a132f1d1e484dd2fdac869365b16111eb41c61e01e1ba64e9083e556cb691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981a132f1d1e484dd2fdac869365b16111eb41c61e01e1ba64e9083e556cb691->enter($__internal_981a132f1d1e484dd2fdac869365b16111eb41c61e01e1ba64e9083e556cb691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a9d4e658641a7ba773cef75ce8aa083eee9c00e18d82c7b8304292854bda19->leave($__internal_97a9d4e658641a7ba773cef75ce8aa083eee9c00e18d82c7b8304292854bda19_prof);

        
        $__internal_981a132f1d1e484dd2fdac869365b16111eb41c61e01e1ba64e9083e556cb691->leave($__internal_981a132f1d1e484dd2fdac869365b16111eb41c61e01e1ba64e9083e556cb691_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b1ff8c5c6b6d450a514f65478b74256594675799f09e528eaf875b3bbdc05e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1ff8c5c6b6d450a514f65478b74256594675799f09e528eaf875b3bbdc05e2->enter($__internal_4b1ff8c5c6b6d450a514f65478b74256594675799f09e528eaf875b3bbdc05e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2801493df1020c5363e27d190a7500dd37093c6c3cb507567646148520aeed10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2801493df1020c5363e27d190a7500dd37093c6c3cb507567646148520aeed10->enter($__internal_2801493df1020c5363e27d190a7500dd37093c6c3cb507567646148520aeed10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2801493df1020c5363e27d190a7500dd37093c6c3cb507567646148520aeed10->leave($__internal_2801493df1020c5363e27d190a7500dd37093c6c3cb507567646148520aeed10_prof);

        
        $__internal_4b1ff8c5c6b6d450a514f65478b74256594675799f09e528eaf875b3bbdc05e2->leave($__internal_4b1ff8c5c6b6d450a514f65478b74256594675799f09e528eaf875b3bbdc05e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
