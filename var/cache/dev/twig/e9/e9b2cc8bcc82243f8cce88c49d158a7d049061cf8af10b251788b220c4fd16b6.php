<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1c2f8190260cd17cc30d10fe33ba5ec15b51646f6c6eb7e5debc3dde14977ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_49d03dd237856897c81071eec6fb57aa83e433e5b614f776ffd254cbb60c20f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d03dd237856897c81071eec6fb57aa83e433e5b614f776ffd254cbb60c20f1->enter($__internal_49d03dd237856897c81071eec6fb57aa83e433e5b614f776ffd254cbb60c20f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_2fa1f927f23bcd7779488b8a660316827e26982009690fbacabe3ec2248cfdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa1f927f23bcd7779488b8a660316827e26982009690fbacabe3ec2248cfdbc->enter($__internal_2fa1f927f23bcd7779488b8a660316827e26982009690fbacabe3ec2248cfdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d03dd237856897c81071eec6fb57aa83e433e5b614f776ffd254cbb60c20f1->leave($__internal_49d03dd237856897c81071eec6fb57aa83e433e5b614f776ffd254cbb60c20f1_prof);

        
        $__internal_2fa1f927f23bcd7779488b8a660316827e26982009690fbacabe3ec2248cfdbc->leave($__internal_2fa1f927f23bcd7779488b8a660316827e26982009690fbacabe3ec2248cfdbc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7884ecec022cc634b0d8974de5f8354221b900f8ae17ad9163e3b37268512cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7884ecec022cc634b0d8974de5f8354221b900f8ae17ad9163e3b37268512cd->enter($__internal_a7884ecec022cc634b0d8974de5f8354221b900f8ae17ad9163e3b37268512cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f2aceff67b8ad699575d523a303a2c67644b163880bb7852b7f630b48c370de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2aceff67b8ad699575d523a303a2c67644b163880bb7852b7f630b48c370de->enter($__internal_3f2aceff67b8ad699575d523a303a2c67644b163880bb7852b7f630b48c370de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3f2aceff67b8ad699575d523a303a2c67644b163880bb7852b7f630b48c370de->leave($__internal_3f2aceff67b8ad699575d523a303a2c67644b163880bb7852b7f630b48c370de_prof);

        
        $__internal_a7884ecec022cc634b0d8974de5f8354221b900f8ae17ad9163e3b37268512cd->leave($__internal_a7884ecec022cc634b0d8974de5f8354221b900f8ae17ad9163e3b37268512cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
